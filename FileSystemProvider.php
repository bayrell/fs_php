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
use Runtime\rtl;
use Runtime\Map;
use Runtime\Vector;
use Runtime\ContextObject;
use BayrellCommon\FileSystem\FileSystemInterface;
class FileSystemProvider extends ContextObject implements FileSystemInterface{
	public function getClassName(){return "BayrellFileSystem.FileSystemProvider";}
	public static function getParentClassName(){return "Runtime.ContextObject";}
	/**
	 * Returns files and folders from directory
	 * @param string basedir
	 * @return Vector<string> res - Result
	 */
	function getDirectoryListing($basedir = ""){
		
		$arr = scandir($basedir, SCANDIR_SORT_ASCENDING);
		$res = new Vector();
		$res->_assignArr($arr);
		return $res;
	}
	/**
	 * Returns recursive files and folders from directory
	 * @param string basedir
	 * @param Vector<string> res - Result
	 */
	function readDirectoryRecursive($basedir = ""){
		$res = new Vector();
		$arr = $this->getDirectoryListing($basedir);
		$arr->each(function ($path) use (&$res){
			$res->push($path);
			if ($this->isDir($path)){
				$res->appendVector($this->getDirectoryListing($path));
			}
		});
		return $res;
	}
	/**
	 * Returns recursive only files from directory
	 * @param string basedir
	 * @param Vector<string> res - Result
	 */
	function getFilesRecursive($basedir = ""){
		$res = new Vector();
		$arr = $this->getDirectoryListing($basedir);
		$arr->each(function ($path) use (&$res){
			if ($this->isDir($path)){
				$res->appendVector($this->getFilesRecursive($path));
			}
			else {
				$res->push($path);
			}
		});
		return $res;
	}
	/**
	 * Returns content of the file
	 * @param string filepath
	 * @param string charset
	 * @return string
	 */
	function readFile($filepath = "", $charset = "utf8"){
		
		return file_get_contents($filepath);
		return "";
	}
	/**
	 * Save file content
	 * @param string filepath
	 * @param string content
	 * @param string charset
	 */
	function saveFile($filepath = "", $content = "", $charset = "utf8"){
		
		file_put_contents($filepath, $content);
	}
	/**
	 * Open file
	 * @param string filepath
	 * @param string mode
	 * @return FileInterface
	 */
	function openFile($filepath = "", $mode = ""){
	}
	/**
	 * Make dir
	 * @param string dirpath
	 * @param boolean create_parent. Default is true
	 */
	function makeDir($dirpath = "", $create_parent = false){
		
		if (file_exists($dirpath)){
			mkdir($dirpath, 0755, true);
		}
	}
	/**
	 * Return true if path is folder
	 * @param string path
	 * @param boolean 
	 */
	function isDir($path){
		
		return is_dir($path);
	}
	/**
	 * Return true if path is file
	 * @param string path
	 * @param boolean 
	 */
	function isFile($path){
		return !$this->isDir($path);
	}
	/**
	 * Make dir
	 * @param string dirpath
	 * @param boolean create_parent. Default is true
	 */
	function makeDir($dirpath = "", $create_parent = false){
		
		if (file_exists($dirpath)){
			mkdir($dirpath, 0755, true);
		}
	}
}