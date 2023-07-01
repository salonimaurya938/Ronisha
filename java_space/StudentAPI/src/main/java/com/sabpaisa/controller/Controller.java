package com.sabpaisa.controller;

import java.util.List;

//import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.sabpaisa.entity.Student;

import ch.qos.logback.core.model.Model;

@RestController
public class Controller {	
	
		@RequestMapping("/")
		public String home() {
			return "home";
		}
	 	public List<Student> getStudent(){
	 	  
	 		
	 	}
		
}
