<?php
    function public_url($string ='' ){
        return base_url('public/'.$string);
    }
    function admin_url($string=''){
        return base_url('index.php/admin/'.$string);
    }
function user_url($string=''){
    return base_url('index.php/'.$string);
}
?>