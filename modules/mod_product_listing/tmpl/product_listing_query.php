<?php           

$user = JFactory::getUser();

// Get a db connection.
$db = JFactory::getDbo();
// Create a new query object.
$query = $db->getQuery(true);
// Select all records from the user profile table where key begins with "custom.".
// Order it by the ordering field.
$query->select($db->quoteName(array('id', 'title', 'alias', 'catid', 'images', 'state', 'urls')));
$query->from($db->quoteName('#__content'));
$query->where($db->quoteName('catid') . ' LIKE '. $catID);
// Reset the query using our newly populated query object.
$db->setQuery($query);
// Load the results as a list of stdClass objects (see later for more options on retrieving data).
$results = $db->loadObjectList();

foreach ( $results as $result  ) { ?>

        <?php  $state = $result->state; ?> 
        <!-- echo $result->title; -->
        <?php // var_dump(json_decode($result->images)->image_fulltext) ?>
        <?php if($state == '1'){ ?>
            <!-- <?php echo 'menu'.$result->id; ?> -->
            <div class="single <?php echo $result->title; ?>">
            <div class="title" style="height:66px!important;font-size:0.775rem;">
             <a href="product/<?php echo $result->id; ?>-<?php echo $result->alias;?>" class="menu__subitem"><?php echo $result->title; ?></a>
            </div>

                <a href="<?php echo $prod.'/'.$result->alias; ?>" class="menu__subitem">
                <center><table id="wrapper">
                    <tbody><tr><td>
                    <img src="<?php echo json_decode($result->images)->image_intro; ?>" alt=""/></td></tr></tbody>
                </table></center></a>
            </div> 

        <?php }else{ ?>
        <?php } ?>
<?php } ?>