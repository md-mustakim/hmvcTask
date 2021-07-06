<script src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
<script>

    function save() {
        let url = "<?php echo base_url(); ?>index.php/product/category/store";
        let name = $("#name").val();
        $("#name").prop("disabled", true);
        $.ajax({
           url: url,
            method: 'POST',
            data: {
               name: name
            },
            success: function (data){
               let res =$.parseJSON(data);
               if (res.status)
               {

               }
            }
        });
    }
</script>