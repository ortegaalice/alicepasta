import 'package:flutter/material.dart';
import 'package:platforms/view/exemplo1_page.dart';
import 'package:platforms/view/exemplo2_page.dart';
import 'package:platforms/view/home_page.dart';

void main(List<String> args) {
  runApp(MaterialApp(
    routes: {
      "/tela1": (context) => Exemplo1Page(),
      "/tela2": (context) => Exemplo2Page()
      // "/tela2": (context) => Exemplo2Page(),
      // "/tela3": (context) => Exemplo3Page()
    },
    home: HomePage(),
  ));
}