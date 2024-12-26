<?php

class Util
{
    // display success and error message

    public function showMessage($type, $message)
    {
        return '<div class="alert alert-'.$type.' alert-dismissible fade show" role="alert">
                <strong>'.$message.'!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
}
