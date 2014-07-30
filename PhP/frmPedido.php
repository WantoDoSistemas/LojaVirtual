<html>

<head>
<title>Cadastro de Pedido</title>
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

#navMenu{
	width: 100%;
	height: 28px;	
	margin-top:5px;
	margin-left:5px;
}

#navMenu ul {
	padding:0px;
	margin:0px;	
	list-style:none;
}

#navMenu ul li { 
	display: inline; 

}

#navMenu ul li a {
	padding: 2px 10px;
	display: inline-block;
 
	/* visual do link */
	background-color:#EDEDED;
	color: #333;
	text-decoration: none;
	font-size:14px;
	border-bottom:3px solid #EDEDED;
}

#navMenu ul li a:hover {
	background-color:#D6D6D6;
	color: #6D6D6D;
	border-bottom:3px solid #EA0000;
}



#navToolBar{
	width: 100%;
	height: 38px;	
	margin-top:0px;
	margin-left:0px;
	
	background-color:#EDEDED;
}

#navToolBar ul {
	padding:0px;
	margin-top:5px;
	margin-left:25%;
	list-style:none;	
	width:48%;
}

#navToolBar ul li { 
	display: inline; 
}

#navToolBar ul li a {
	padding: 2px 5px;
	display: inline-block;
 
	/* visual do link */
	
	
	text-decoration: none;

	
}

#navToolBar ul li a:hover {	
	border-bottom:3px solid #EA0000;
}

#tabForm{
	margin-left:20%;
	margin-top:35px;
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
							<span id="titulo"><center>Cadastro de Pedido</center></span>
						</div>
					</td>
				</tr>
				
				<tr>
					<td colspan="2">
						<nav id="navMenu">
							<ul>
								<li><a href="#">Principal</a></li>
								<li><a href="#">Cliente</a></li>
								<li><a href="#">Categoria</a></li>
								<li><a href="#">Produto</a></li>
								<li><a href="#">Promoção</a></li>
								<li><a href="#">Formas Pgto</a></li>
								<li><a href="#">Usuário</a></li>
								<li><a href="#">Banner</a></li>
								<li><a href="#">Pedidos</a></li>
								<li><a href="#">Relatórios</a></li>
							</ul>
						</nav>
					</td>
					
				</tr>
				
				<tr>
					<td colspan="2">
						<nav id="navToolBar">
							<ul>
								<li><a href="#"><img src="../images/add.ico"></a></li>
								<li><a href="#"><img src="../images/save.ico"></a></li>
								<li><a href="#"><img src="../images/no.ico"></a></li>
								<li>
									<select id="cmbFiltro">
										<option value="0"></option>
										<option value="1">Opção 1</option>
										<option value="2">Opção 2</option>
										<option value="3">Opção 3</option>
									</select>
								
									<input type="text" id="txtFiltro" name="txtFiltro"></li>	
									<a href="#"><img src="../images/find.ico"></a>
								</li>					
								
							</ul>
						</nav>
					</td>					
				</tr>
				
				<tr>
					<td colspan="2">
						<form>
							<table id=tabForm>
								<tr>
									<td>Código</td> <td><input type="text" id="txtCodigo" name="txtCodigo" disabled size="10px"></td>
								<tr>
								<tr>
									<td>Cliente</td> <td><input type="text" id="txtCliente" name="txtCliente" disabled size="60px"></td>
								<tr>								
								<tr>
									<td>Data Pedido</td> <td><input type="text" id="txtDtPedido" name="txtDtPedido" disabled size="10px"></td>									
								<tr>								
								<tr>
									<td>Valor Frete</td> <td><input type="text" id="txtVlFrete" name="txtVlFrete" disabled size="10px"> reais</td>
								<tr>
								<tr>
									<td>Forma Pagamento</td> 
									<td>
										<select disabled>
										  <option value="0">Selecione...</option>		
										  <option value="1">Dinheiro</option>
										  <option value="2" selected>Cartão</option>
										  <option value="3">Boleto</option>
										</select>
									</td>
								<tr>	
								<tr>
									<td>Prazo Entrega</td> <td><input type="text" id="txtPrazo" name="txtPrazo" size="10px"> dias</td>
								<tr>									
								<tr>
									<td>Status</td> <td><input type="text" id="txtStatus" name="txtStatus" size="40px"></td>
								<tr>
								<tr>
									<td><input name="cmdItensPedido" type="button" onClick="http://wantodo.com.br" value="Itens Pedido"></td> 
								<tr>				
							</table>
						</form>
					</td>
				</tr>
				
				<tr>
					<td colspan="2">
						<table id="box-table-b">
							<tr>
								<th scope="col" style="width:50px;">Código</th>								
								<th scope="col" style="width:400px;">Cliente</th>
								<th scope="col" style="width:100px;">Data Pedido</th>
								<th scope="col" style="width:150px;">Status</th>
								<th scope="col"></th>	
								<th scope="col"></th>	
							</tr>
							<tbody>
							<tr>
								<td>1</td>
								<td style="text-align: left;">Stephen C. Cox</td>
								<td>28/07/2014</td>
								<td>Aguardando Transportadora</td>
								<td><img src="../images/edit.png"></td>
								<td><img src="../images/delete.png"></td>	
							</tr>							
							</tbody>
						</table>
					</td>
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