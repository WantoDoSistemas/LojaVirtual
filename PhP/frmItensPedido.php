<html>

<head>
<title>Itens do Pedido</title>
<style>

A {
	text-decoration: underline;
	color:FF7E00;
	font-size: 10; 
	font-family: arial;
}
TD{
FONT-SIZE:11;
FONT-FAMILY:arial;
COLOR:000000;
}

#divLogo{
	width: 100%;
	height: 80px;
	background-image: url("../images/fundo_topo.jpg");
}

#titulo{
	font-size: 30px;
	color: white;
	margin-left: 15px;
}

#box-table-b {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 12px;
text-align: center;
border-collapse: collapse;
border-top: 7px solid #9baff1;
border-bottom: 7px solid #9baff1;
margin: 20px;
}

#box-table-b th {
font-size: 13px;
font-weight: normal;
background: #e8edff;
border-right: 1px solid #9baff1;
border-left: 1px solid #9baff1;
border-bottom: 1px solid #aabcfe;
color: #039;
padding: 8px;
}

#box-table-b td {
background: #e8edff;
border-right: 1px solid #aabcfe;
border-left: 1px solid #aabcfe;
color: #669;
padding: 8px;
}

#box-table-b tr:hover td {
background: #d0dafd;
color: #339;
}

</style>
</head>

<body LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH="0" MARGINHEIGHT="0">
<table height="100%" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td width="50%" background="../images/bg.jpg"></td>
			  <td background="../images/bg_lft.jpg" width="28" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			  <td bgcolor="#FFFFFF" valign="top" height="100%">


			<table border="0" cellpadding="0" cellspacing="0" width="800" height="100%">
				<tr>
					<td colspan="2">  <!--<img src="../images/slogan.jpg" border="0" width="800" height="110" alt=""> -->
						<div id="divLogo" width="800" height="110">
							<br>
							<span id="titulo"><center>Itens de Pedido</center></span>
						</div>
					</td>
				</tr>				
				
				<tr>
					<td colspan="2">
						<table id="box-table-b">
							<tr>
								<th scope="col" style="width:50px;">Código</th>								
								<th scope="col" style="width:600px;">Produto</th>
								<th scope="col" style="width:50px;">Quantidade</th>
								<th scope="col"></th>	
								<th scope="col"></th>	
							</tr>
							<tbody>
							<tr>
								<td>1</td>
								<td style="text-align: left;">Mesa Branca Madeira</td>
								<td>1</td>
								<td><img src="../images/edit.png"></td>
								<td><img src="../images/delete.png"></td>	
							</tr>	
							<tr>
								<td>2</td>
								<td style="text-align: left;">Cadeira Branca Madeira</td>
								<td>4</td>
								<td><img src="../images/edit.png"></td>
								<td><img src="../images/delete.png"></td>	
							</tr>						
							</tbody>
						</table>						
					</td>
				<tr>
					<td><center><input name="cmdFechar" type="button" onClick="http://wantodo.com.br" value="Fechar"></center></td> 
				</tr>	
				<tr>
					<td valign="top" height="100%">
								
					</td>
					
				</tr>
				<tr>
					<td background="../images/footer_2.jpg" height="44" align="center" valign="middle"><font style="font-size:9;font-family:verdana;font:900;color:666666">
						Desenvolvido por <a href="http://wantodo.com.br">WanToDo</a> Sistemas. 2014
					</td>
				</tr>
			</table>
		</td>
		
		<td width="50%" background="../images/bg_lft.gif"></td>
	</tr>
</table>
  </body>
</html>