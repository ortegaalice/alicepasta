package com.Model.Repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;

import com.Model.Funcionario;

public interface FuncionarioRepository extends CrudRepository<Funcionario, Long> {
     // métodos para realizar o crud do funcionario
     // criar uma busca pela chave primaria do Funcionario
        Funcionario findById(String buscar);


    //busca pelo nome
    Funcionario findByNome(String nome);

    //Busca para varios nomes // não existe no JPA
    @Query(value ="select u from Funcionario u where u.nome like %?1%")
    List<Funcionario> findByNomeContaining(String nome);
}

    
    