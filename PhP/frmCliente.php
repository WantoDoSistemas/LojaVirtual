<html>

<head>
<title>Cadastro de Cliente</title>
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

.tabForm{
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

.frame{
	width:60%;
	margin-left:20%;
	margin-top:10px;
	border-color:#B0C4DE;
	color:#B0C4DE;
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
							<span id="titulo"><center>Cadastro de Cliente</center></span>
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
							<table id=tabForm1 class="tabForm">
								<tr>
									<td>Código</td> <td><input type="text" id="txtCodigo" name="txtCodigo" disabled size="10px"></td>
								</tr>
								
								<tr>
									<td>Nome</td> <td><input type="text" id="txtNome" name="txtNome" size="70px"></td>
								</tr>
								
								<tr>
									<td>Usuário</td><td><input type="text" id="txtUsuario" name="txtUsuario" size="40px"></td>
								</tr>
								
								<tr>
									<td>Email</td> <td><input type="text" id="txtEmail" name="txtEmail" size="70px"></td>
								</tr>								
							</table>
							
							<fieldset class="frame">	
								<legend>Endereço Residencial</legend>
								<table id=tabEnderecoRes>
									<tr>
										<td>CEP</td> <td><input type="text" id="txtCepRes" name="txtCepRes" size="20px"></td>
									</tr>
									
									<tr>
										<td>UF</td> <td><input type="text" id="txtUfRes" name="txtUfRes" size="5px"></td>
									</tr>
									
									<tr>
										<td>Cidade</td> <td><input type="text" id="txtCidadeRes" name="txtCidadeRes" size="64px"></td>
									</tr>									
								
									<tr>
										<td>Endereço</td> <td><input type="text" id="txtEndRes" name="txtEndRes" size="64px"></td>
									</tr>
									
									<tr>
										<td>Número</td> <td><input type="text" id="txtNumeroRes" name="txtNumeroRes" size="20px"></td>
									</tr>
									
									<tr>
										<td>Complemento</td> <td><input type="text" id="txtComplementoRes" name="txtComplementoRes" size="64px"></td>
									</tr>									
								</table>								
							</fieldset>
							
							<fieldset class="frame">	
								<legend>Endereço Entrega</legend>
								<table id=tabEnderecoEntrega>
									<tr>
										<td>CEP</td> <td><input type="text" id="txtCepEntrega" name="txtCepEntrega" size="20px"></td>
									</tr>
									
									<tr>
										<td>UF</td> <td><input type="text" id="txtUfEntrega" name="txtUfEntrega" size="5px"></td>
									</tr>
									
									<tr>
										<td>Cidade</td> <td><input type="text" id="txtCidadeEntrega" name="txtCidadeEntrega" size="64px"></td>
									</tr>									
								
									<tr>
										<td>Endereço</td> <td><input type="text" id="txtEndEntrega" name="txtEndEntrega" size="64px"></td>
									</tr>
									
									<tr>
										<td>Número</td> <td><input type="text" id="txtNumeroEntrega" name="txtNumeroEntrega" size="20px"></td>
									</tr>
									
									<tr>
										<td>Complemento</td> <td><input type="text" id="txtComplementoEntrega" name="txtComplementoEntrega" size="64px"></td>
									</tr>									
								</table>								
							</fieldset>
							
							<table id=tabForm2 class="tabForm" style="margin-top:10px;">
								<tr>
									<td>Tel. Res.</td> <td><input type="text" id="txtTelRes" name="txtTelRes" disabled size="20px"></td>
								</tr>
								
								<tr>
									<td>Tel. Com.</td> <td><input type="text" id="txtTelCom" name="txtTelCom" size="20px"></td>
								</tr>
								
								<tr>
									<td>Celular</td><td><input type="text" id="txtCelular" name="txtCelular" size="20px"></td>
								</tr>
								
								<tr>
									<td>Data Nasc.</td> <td><input type="text" id="txtDataNescimento" name="txtDataNescimento" size="30px"></td>
								</tr>	

								<tr>
									<td>Ativo</td> <td><input type="checkbox" id="chkAtivo" name="chkAtivo" value="Ativo"></td>
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
								<th scope="col" style="width:230px;">Nome</th>
								<th scope="col" style="width:100px;">Usuário</th>
								<th scope="col" style="width:230px;">Email</th>	
								<th scope="col" style="width:60px;">Status</th>								
								<th scope="col"></th>	
								<th scope="col"></th>
							</tr>
							<tr>
								<td>0001</td>
								<td style="text-align: left;">Gabriel</td>
								<td>JOSEGSG</td>
								<td>teste@teste.com.br</td>
								<td>Ativo</td>														
								<td><img src="../images/edit.png"></td>
								<td><img src="../images/delete.png"></td> 
							</tr>
						</table>
					</td>
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