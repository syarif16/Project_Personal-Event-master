


$(document).ready(function(){
    "use strict";
    
    var session = "<?php echo $_SESSION['Modal-Alert'] ?>";
    if(session == 'Failed-Subscribe') {
        $('#modal-failed').modal('show');
    }
    else if(session == 'Duplicate-Subscribe')
    {
        $('#modal-duplicate').modal('show');
    }
    else if(session == 'Success-Subscribe')
    {
        $('#modal-success').modal('show');
    }
});