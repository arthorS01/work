
<body>
    
    <nav>
        <section id="menu-bar">
            <div id="user-id">
                <i class="icofont-duotone icofont-user"></i>
                <span id="email">stephenarth...</span>
                <div id="other-tools">
                    <i class="icofont-duotone icofont-rebuild"></i>
                    <i class="icofont-duotone icofont-notification"></i>
                    <i class="icofont-duotone icofont-manage-user"></i>
                </div>
            </div>
            <div id="user-menu">
                <ul id="menu-items">
                    <li><button><i class="icofont-duotone icofont-calendar"></i></button><span>Today</span></li>
                    <li><button><i class="icofont-duotone icofont-mass-mail"></i></button><span>Inbox</span></li>
                    <li><button><i class="icofont-duotone icofont-briefcase"></i></button><span>Investments</span></li>
                    <li><button><i class="icofont-duotone icofont-pencil"></i></button><span>Content ideas</span></li>
                    <li><button><i class="icofont-duotone icofont-list"></i></button><span>Research</span></li>
                    <li><button><i class="icofont-duotone icofont-list"></i></button><span>Seo steps</span></li>
                    <li><button><i class="icofont-duotone icofont-briefcase"></i></button><span>Work</span></li>
                    <li><button><i class="icofont-duotone icofont-learn"></i></button><span>learning</span></li>
                   
                </ul>
                <div id="bottom-icons">
                    <button><i class="icofont-duotone icofont-plus-circle"></i><span>Add</span></button>
                    <button><i class="icofont-duotone icofont-manage"></i></button>
                </div>
            </div>
        </section>
    </nav>
    <main>

        <button id="add-task-btn">+</button>
        <section id="user-area">
            <div id="top-main-section-menu">
                <div id="section-title">
                    <button id="menu-btn"><i class="icofont-duotone icofont-menu"></i></button>
                    <h1>Today</h1>
                </div>
                <div>
                    <button><i class="icofont-duotone icofont-file-check"></i></button>
                    <button><i class="icofont-duotone icofont-list-thin"></i></button>
                </div>
            </div>

            <div class="activity-row-container">
                <div id="activity-head">
                    <h2>Habit</h2> 
                    <div>
                        <span id="activity-count">1</span>
                        <button id="drop-activity-btn"><i class="icofont-duotone icofont-angle-double-right"></i></button>
                    </div>
                </div>
                
                <div class="activity-row">
                    <div class="data-entry">
                        <span class="initial">A</span>
                        <span>Plan my day</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="bottom-main-menu">
            <i class="icofont-duotone icofont-radio-checked"></i>
            <i class="icofont-duotone icofont-calendar"></i>
            <i class="icofont-duotone icofont-increase"></i>
            <i class="icofont-duotone icofont-workflows"></i>
            <i class="icofont-duotone icofont-cogs"></i>
            
        </section>

        
    </main>

    <section id="form-area" >
        <button id="form-area-close-btn">x</button>
        <section id="add-task-form">
            <input type="text" placeholder="what would you like to do?" name="task">
            <div id="form-tools">
                <input type="date" placeholder="today" name="date" >
                <div id="priority-selector">
                    <div id="priority-list-container">
                        <ul>
                            <li><i id="high-priority" class="icofont-duotone icofont-flag"></i> <button data_level="4" class="priority">High priority</button></li>
                            <li><i id="med-priority" class="icofont-duotone icofont-flag"></i> <button data_level="3" class="priority">Medium priority</button></li>
                            <li><i id="low-priority" class="icofont-duotone icofont-flag"></i> <button data_level="2" class="priority">Low priority</button></li>
                            <li><i class="icofont-duotone icofont-flag"></i> <button data_level="1" class="priority">No priority</button></li>
                        </ul>
                    </div>
                    <button id="priority-select-btn"><i class="icofont-duotone icofont-flag"></i></button>
                </div>

                <div id="category-selector">
                    <div id="category-list-container">
                        <ul>

                       
                            <?php foreach($categories as $category):?>
                            <li><button class="category"><i class=<?=$category["name"]?>></i> <span data-categoryID=<?=$category["categoryID"]?>><?=$category["category_name"]?></span> </button></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <button id="category-select-btn"><i class="icofont-duotone icofont-list"></i></button>
                </div>

                <button><i class="icofont-duotone icofont-pictures"></i></button>
                
            </div>
            <input type="hidden" id="priority-level" value="0" name="priority-level">
            <input type ="hidden" id="categoryID" value="2" name="categoryID">
            <button id="save-task-btn"><i class="icofont-duotone icofont-publish"></i></button>
        </section>
    </section>
</body>