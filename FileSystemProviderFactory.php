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
use Runtime\CoreObject;
use Runtime\ContextObject;
use Runtime\Interfaces\ContextInterface;
use Runtime\Interfaces\FactoryInterface;
use BayrellFileSystem\FileSystemProvider;
class FileSystemProviderFactory extends ContextObject implements FactoryInterface{
	/**
	 * Returns new Instance
	 */
	function newInstance($context = null, $params = null){
		$obj = new FileSystemProvider($context);
		return $obj;
	}
	/* ======================= Class Init Functions ======================= */
	public function getClassName(){return "BayrellFileSystem.FileSystemProviderFactory";}
	public static function getCurrentClassName(){return "BayrellFileSystem.FileSystemProviderFactory";}
	public static function getParentClassName(){return "Runtime.ContextObject";}
	public static function getFieldsList($names, $flag=0){
	}
	public static function getFieldInfoByName($field_name){
		return null;
	}
	public static function getMethodsList($names){
	}
	public static function getMethodInfoByName($method_name){
		return null;
	}
}