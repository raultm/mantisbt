<?php
# Mantis - a php based bugtracking system
# Copyright (C) 2002 - 2008  Mantis Team   - mantisbt-dev@lists.sourceforge.net
# Mantis is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 2 of the License, or
# (at your option) any later version.
#
# Mantis is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with Mantis.  If not, see <http://www.gnu.org/licenses/>.
#
# --------------------------------------------------------
# $Id$
# --------------------------------------------------------

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

$f_process_text = gpc_get_int( 'process_text', ON );
$f_process_urls = gpc_get_int( 'process_urls', ON );
$f_process_buglinks = gpc_get_int( 'process_buglinks', ON );
$f_process_vcslinks = gpc_get_int( 'process_vcslinks', ON );

if( plugin_config_get( 'process_text' ) != $f_process_text ) {
	plugin_config_set( 'process_text', $f_process_text );
}

if( plugin_config_get( 'process_urls' ) != $f_process_urls ) {
	plugin_config_set( 'process_urls', $f_process_urls );
}

if( plugin_config_get( 'process_buglinks' ) != $f_process_buglinks ) {
	plugin_config_set( 'process_buglinks', $f_process_buglinks );
}

if( plugin_config_get( 'process_vcslinks' ) != $f_process_vcslinks ) {
	plugin_config_set( 'process_vcslinks', $f_process_vcslinks );
}

print_successful_redirect( plugin_page( 'config', true ) );