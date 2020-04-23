<!DOCTYPE html>
<html>
    <head>
    </head> 
    <body>
        <?php $arr1 = ['ali', 'hassan', 'hossein']; ?>
        <?php $arr2 = array(1,2,3,4); ?>
        <?php array_push($arr2, 5, 6); ?>
        <?php $arr1[] = 'abbas'; ?>
        <?php print_r($arr1); ?>
        <?php print_r($arr2); ?>
        <?php $dict = array('dad' => 'son', 'mother' => 'daughter'); ?>
        <?php $dict['child'] = 'grand-child'; ?>
        <?php print_r($dict); ?>
        <?php echo count($dict); ?>
        <?php $arr_2_d = array(0 => array('one', 'two', 'three'),
                                1 => array('four', 'five'),
                                2 => array('six', 'seven', 'eight')); ?>

        <?php print_r($arr_2_d); ?>
    </body>
</html>
