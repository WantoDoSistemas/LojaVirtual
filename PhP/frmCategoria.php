<html>

<head>
<title>Cadastro de Categoria</title>
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
							<span id="titulo"><center>Cadastro de Categoria</center></span>
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
									<td>Nome</td> <td><input type="text" id="txtNome" name="txtNome" size="40px"></td>
								<tr>
								
								<tr>
									<td>Descrição</td> <td><input type="text" id="txtDescricao" name="txtDescricao" size="61px"></td>
								<tr>
								
								<tr>
									<td>Palavras<br>Chave</td> <td><textarea id="txtPalavraChave" name="txtPalavraChave" rows="4" cols="47"></textarea></td>
								<tr>
								
								<tr>
									<td>Nº Ordem</td> <td><input type="text" id="txtOrdem" name="txtOrdem" size="10px"></td>
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
								<th scope="col" style="width:150px;">Nome</th>
								<th scope="col" style="width:240px;">Descrição</th>
								<th scope="col" style="width:230px;">Palavras Chave</th>	
								<th scope="col">Nº Ordem</th>	
							</tr>
							<tr>
								<td>aaaaa</td>
								<td>aaaa</td>
								<td style="text-align: left;">aaaaa</td>
								<td>aaaaa</td>
								<td>aaaaa</td>
							</tr>
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