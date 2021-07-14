<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Calendar Class
 *
 * This class enables the creation of calendars
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/libraries/calendar.html
 */
    class CI_Custom {

        public function match_exams_to_programs($exam,$programs,$venues)
        {
		    
            $arr = [];
            $arr1 = [];
            $count = 0;
            $count1 = 0;
            $id = [];
            $prog = [];
            for ($i = 0; $i < count($exam);$i++) {
                $arr[$i] = explode(',',$exam[$i]->program);
            }
            for ($i=0; $i < count($arr); $i++) {
                for ($j=0; $j < count($arr[$i]); $j++) { 
                    $arr1[$count++] = $arr[$i][$j]; 
                }
            }
            $uni = array_unique($arr1);
            for ($i=0; $i < count($arr1); $i++) {
                for ($j=0; $j < count($programs); $j++) { 
                $id[$i] = array_search($arr1[$i],array_column($programs,'prog_code'));
                }
            }
            foreach ($id as $i) {
                $prog[$count1++] = $programs[$i];
            }
            foreach ($prog as $p) {
                echo print_r($p).'</br></br>';
            }
            foreach ($venues as $key) {
                echo ($key->capacity).'</br>';
            }
            for ($i=0; $i < count($prog); $i++) {
                $cap = 0;
                $cap = $prog[$i]->capacity; 
                for ($j=0; $j < count($venues); $j++) {
                    while($venues[$j]->capacity > -1){
                        if ($venues[$j]->capacity==0) {
                        continue;
                        } 
                        elseif ($venues[$j]->capacity>=$cap) {
                        
                        }
                        elseif ($venues[$j]->capacity<=$cap) {
                        
                        }
                    }
                }   
            }
        }
    }
?>