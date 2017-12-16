<?php


return [
	'model'             => \App\Accont::class,  // model de tenant
	'field_name'        => 'subdomain',         // campo que ira procurar o tenant
	'foreign_key'       => 'account_id',        // chave estrageira que ira relacionar com account
	'route_param'       => 'account',           // nome do parametro de rota que ira pegar (qual tenant)
	'subdomains_except' => [
		'master'
	]
];