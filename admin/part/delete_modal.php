<div class="modal fade" id="delete">
<div class="modal-dialog">
    <div class="modal-content" style="margin-top:100px;">
    <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Are you sure ?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>       
    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
        <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
    </div>
    </div>
</div>
</div>

<script type="text/javascript">
    function confirm_modal(delete_url)
    {
        $('#delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>