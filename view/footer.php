</div>
<script>
$(document).ready(function(){
    $('a.confirmar').click(function(e) {
        e.preventDefault();

        if(confirm("Tem certeza que deseja remover este item?")){
            var href = $(this).attr('href');

            window.location = href;
        }
    });

});

</script>
</body>
</html>
