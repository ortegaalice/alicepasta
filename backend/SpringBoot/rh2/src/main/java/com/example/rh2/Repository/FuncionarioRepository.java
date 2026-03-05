package com.example.rh2.Repository;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

import java.util.List;


public interface FuncionarioRepository extends CrudRepository<FuncionarioRepository, Long> {
    //permitir a urilização dos métodos do crud do JPA

    //métodos auxiliares

    FuncionarioRepository findById(long id); // buscar um funcionario pelo id

    FuncionarioRepository findByNome(String nome); //buscar funcionario pelo nome

    //Buscar funcionário por parte do nome
    @Query(value = "select u from Funcionario u where u.nome like %?1%")
    List<FuncionarioRepository> findByLetras(String letras);


}
