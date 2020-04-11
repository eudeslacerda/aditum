<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="#">
		<img src="/storage/img/logo/logo-67x32.png"/>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarCollapse" aria-controls="navbarCollapse"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item"><a class="nav-link"
				href="<?= Kohana::message('menu','inicio.endereco')?>"><?= Kohana::message('menu','inicio.rotulo')?><span
					class="sr-only">(current)</span></a></li>
			<li class="nav-item"><a class="nav-link" href="<?= Kohana::message('menu','cliente.rotulo')?>"><?= Kohana::message('menu','cliente.rotulo')?></a></li>
			<li class="nav-item"><a class="nav-link" href="<?= Kohana::message('menu','pedido.rotulo')?>"><?= Kohana::message('menu','pedido.rotulo')?></a></li>
			<li class="nav-item"><a class="nav-link" href="<?= Kohana::message('menu','evento.rotulo')?>"><?= Kohana::message('menu','evento.rotulo')?></a></li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?= Kohana::message('menu','configuracao.rotulo')?>"><?= Kohana::message('menu','configuracao.rotulo')?></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?=Kohana::message('menu','usuario.endereco') ?>"><?=Kohana::message('menu','usuario.rotulo') ?></a>
				</div>
			</li>
		</ul>
		<form class="form-inline mt-2 mt-md-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search"
				aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>

