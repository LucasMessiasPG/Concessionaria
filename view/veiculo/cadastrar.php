<?php $this->render('header')?>
<h3>Cadastrar - Veiculo</h3>
<form action="" method="post">
    <table>
        <tr>
            <td>
                <select name='modelo'>
                    <option value="">Modelo</option>
                    <?php
                    for($i=0;$i<count($parametros[1]);$i++){
                    ?>
                    <option value="<?php echo ${1}[$i]->id_modelo; ?>"><?php echo ${1}[$i]->nome; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <select name='cor'>
                    <option value="">Cor</option>
                    <?php
                    for($i=0;$i<count($parametros[2]);$i++){
                    ?>
                    <option value="<?php echo ${2}[$i]->id_cor; ?>"><?php echo ${2}[$i]->nome; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label>Placa:</label>
            </td>
            <td>
                <input type="text" name="placa" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Ano Frabricação:</label>
            </td>
            <td>
                <input type="text" name="ano_fabricacao" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Ano Modelo:</label>
            </td>
            <td>
                <input type="text" name="ano_modelo" />
            </td>
        </tr>
        <tr>
            <td>
                <label>Preço:</label>
            </td>
            <td>
                <input type="text" name="preco" />
            </td>
        </tr>
        <tr>
           <td>
                <input type="submit" />
            </td>
        </tr>
        </table>
</form>
<br/>
<a href="http://localhost/concessionaria/?url=marca/cadastrar">Cadastrar Marca</a>
<br/>
<a href="http://localhost/concessionaria/?url=modelo/cadastrar">Cadastrar Modelo</a>
<br/>
<a href="http://localhost/concessionaria/?url=cor/cadastrar">Cadastrar Cor</a>

<?php $this->render('footer') ?>