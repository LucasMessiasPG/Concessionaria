<script>
    $(document).ready(function(){
        $('#marca').change(function() {
            var modelos = $('#modelo'),
                value = $(this).val();

            if(value != ''){
                $.getJSON('<?php echo URL ?>modelo/select/'+value, function(data) {
                    modelos.empty();

                    var option;

                    if(data.length > 0){
                        $.each(data, function(index, modelo){
                            option = $('<option>').val(modelo.id_modelo).text(modelo.nome);

                            modelos.append(option);
                        })
                    } else {
                        option = $('<option>').val("").text("Nenhum modelo encontrado.");

                        modelos.append(option);
                    }
                });
            }
        });
    });
</script>
