// criar o void main
// responsável por rodar o elemento principal da aplicação 

import 'package:flutter/material.dart';

void main(){
  //runApp => chama o elemetno com o materialAPP
  runApp(MainApp());
}

//criar a classe MainApp
class MainApp extends StatelessWidget {
  const MainApp({super.key});

  @override
  Widget build(BuildContext context) {
    //montar a estrutura do MaterialApp
    return MaterialApp(
      home: Scaffold(
       appBar: AppBar(title: Text("Tela de Login"),),
       body:Container(
      child: Center(
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                //elementos de input de texto
                Text("Email"),
                TextField(),
                Text("Senha"),
                TextField(),
                TextButton(onPressed: (){}, child: Text("Enviar"))
             ],
            ),
          ),
        ),
        bottomNavigationBar: BottomNavigationBar(
          items://permite mais de 1, abre colchetes
          [
            BottomNavigationBarItem(icon: Icon(Icons.arrow_back)),
            BottomNavigationBarItem(icon: Icon(Icons.home)),
            BottomNavigationBarItem(icon: Icon(Icons.arrow_forward)),

          ]
         ),
      ),
    );
  }
}