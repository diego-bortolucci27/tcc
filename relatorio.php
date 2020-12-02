<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
    session_start();
    require_once 'verifica_login.php';
	require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Relatório</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'relatorio.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Alunos</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>RM</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Série</b></td>';
		$html .= '<td><b>Curso</b></td>';
        $html .= '<td><b>Entrada</b></td>';
        $html .= '<td><b>Saída</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$sql = "SELECT * FROM view_infoaluno";
		$query = mysqli_query($conexao , $sql);
		
		while($row = mysqli_fetch_assoc($query)){
			$html .= '<tr>';
			$html .= '<td>'.$row["rm"].'</td>';
			$html .= '<td>'.$row["nome"].'</td>';
			$html .= '<td>'.$row["serie"].'</td>';
            $html .= '<td>'.$row["curso"].'</td>';
            $html .= '<td>'.$row["entrada"].'</td>';
            $html .= '<td>'.$row["saida"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>