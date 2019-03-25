<?php
/*!
 *  Bayrell File System Provider
 *
 *  (c) Copyright 2016-2018 "Ildar Bikmamatov" <support@bayrell.org>
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      https://www.bayrell.org/licenses/APACHE-LICENSE-2.0.html
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
namespace BayrellFileSystem;
use Runtime\rs;
use Runtime\rtl;
use Runtime\Map;
use Runtime\Vector;
use Runtime\Dict;
use Runtime\Collection;
use Runtime\IntrospectionInfo;
use Runtime\UIStruct;
use BayrellCommon\FileSystem\FileInterface;
class FileInstance implements FileInterface{
	/**
	 * Returns stream
	 */
	function getStream(){
	}
	/**
	 * Flush file
	 */
	function flush(){
	}
	/**
	 * Close files
	 */
	function close(){
	}
	/* ======================= Class Init Functions ======================= */
	public function getClassName(){return "BayrellFileSystem.FileInstance";}
	public static function getCurrentClassName(){return "BayrellFileSystem.FileInstance";}
	public static function getParentClassName(){return "";}
}