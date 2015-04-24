</div>
<script>
<<<<<<< HEAD
    $(document).ready(function(){
        $('.confirm').click(function(){
            confirm('teste');
        });
    });
=======
$(document).ready(function(){
    $('a.confirmar').click(function(e) {
        e.preventDefault();

        if(confirm("Tem certeza que deseja remover este item?")){
            var href = $(this).attr('href');

            window.location = href;
        }
    });

});
>>>>>>> origin/jonas
</script>
</body>
</html>
