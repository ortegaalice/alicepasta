package com.example.rh2.Controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.example.rh2.Repository.FuncionarioRepository;


@Controller
public class IndexController {
    //atributo
    
    @GetMapping("/")
    public String abrirIndex(){
        //será criado futuramente uma mensagem de saudação
        return "index";
    }
    
    
}
