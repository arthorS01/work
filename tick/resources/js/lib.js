import { getColorLevelMap } from "./app.js";

export function setFormDate(){
    let date = new Date();
    let year = date.getFullYear();
    let month = date.getMonth();
    let day = date.getDate();

    
    if(day.toString().length < 2){
        
        day = "0"+day.toString();
    }

    if(month.toString().length < 2){
        
        month = "0"+month.toString();
    }

    let fullday = `${year}-${month}-${day}`;

    document.querySelector("input[type='date']").value = fullday;

}

export function saveTask(){

    let row = null;
    
    //get the date
    let date = document.querySelector("input[type='date']").value;
    //get the priority
    let priority = document.querySelector("#priority-level").value;
    //get the task text
    let text = document.querySelector("input[type='text']").value;

    let categoryId = document.querySelector("#categoryID").value

    //validation
    if(text.length < 2  ){
        alert("Please describe the task");
        return false;
    }
    //save task

    fetch("http://localhost/tick/save",{
        method:"POST",
        body:JSON.stringify(
            {
                detail:text,
                priority:priority,
                date:date,
                categoryId
            }
        )
    })
    .then(response=>response.json())
    .then(data=>{

            row = document.createElement("div");
            row.classList.add("activity");
            let checkColor = getColorLevelMap(document.querySelector("#priority-level").value);
            row.innerHTML = `<input type='checkbox' style='outline:px solid ${getColorLevelMap(data.task.priority)};' > <span class="activity-text">${data.task.detail}</span>`;
            
            alert("Added new task");

            addActivityRow(row);
    }).catch(err=>{
       alert("An error occured")
    });
    
    
}
export function addActivityRow(HTML){
    document.querySelector(".activity-row-container").prepend(HTML);
    console.log(HTML);

    //add priority and category styling to entry
}