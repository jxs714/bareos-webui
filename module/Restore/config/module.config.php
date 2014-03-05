<?php

/**
 *
 * Barbossa - A Web-Frontend to manage Bareos
 * 
 * @link      http://github.com/fbergkemper/barbossa for the canonical source repository
 * @copyright Copyright (c) 2013-2014 dass-IT GmbH (http://www.dass-it.de/)
 * @license   GNU Affero General Public License (http://www.gnu.org/licenses/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

return array(

	'controllers' => array(
		'invokables' => array(
			'Restore\Controller\Restore' => 'Restore\Controller\RestoreController',
		),
	),
	
	'router' => array(
		'routes' => array(
			'restore' => array(
				'type' => 'segment',
				'options' => array(
					'route' => '/restore[/][:action][/:id]',
					'constraints' => array(
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
						'id' => '[0-9]+',
					),
					'defaults' => array(
						'controller' => 'Restore\Controller\Restore',
						'action' => 'index',
					),
				),
			),
		),
	),
	
	'view_manager' => array(
		'template_path_stack' => array(
			'restore' => __DIR__ . '/../view',
		),
	),

);