<?php 

include('class/Config.php');

if(isset($_POST['search']) && !empty($_POST['search'])){
    $search = $user->checkInput($_POST['search']);
    $result = $user->search($search);
    if(!empty($result)){
    echo ' <div class="nav-right-down-wrap"><ul> ';
    foreach ($result as $users) {
        echo '		 	
                <li>
                      <div class="nav-right-down-inner">
                        <div class="nav-right-down-left">
                            <a href="'.$users->title.'"></a>
                        </div>
                        <div class="nav-right-down-right">
                            <div class="nav-right-down-right-headline">
                                <a href=""><p>'.$users->title.'</p><p>'.  $users->description.'</p>
                                </a><hr>
                            </div>
                            <div class="nav-right-down-right-body">
                             
                            </div>
                        </div>
                    </div> 
                 </li> ';
    }
        echo '</ul></div>';
    }
}

    ?>