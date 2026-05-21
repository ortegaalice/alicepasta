import 'package:flutter/material.dart';
import 'package:shared_preferences/shared_preferences.dart';

class Exemplo2Page extends StatefulWidget {
  const Exemplo2Page({super.key});

  @override
  State<Exemplo2Page> createState() => _Exemplo2PageState();
}

class _Exemplo2PageState extends State<Exemplo2Page> {
  late SharedPreferences _prefs;//escopo late, permite criar uma variavel/obj inicialmente nula e mudar o valor depois
// pode ser mudada quantas vezes for necessario
bool _darkMode = false;
//metodos de conexao com o SharedPreferences
@override
void initState() {
  //TODO: implement initStatev
  super.initState();
}
//metodo para buscar dados do SharedPreferences
// ignore: unused_element
void _loadPreferences () async{
  _prefs = await SharedPreferences.getInstance();//pega as informações salvas no shared
  setState(() {
    _darkMode = _prefs.getBool("darkMode") ?? false;  //verificação de nulidade obrigatoria, ?? se caso a cahve do darkMode do shared seja nula (não tenha vaklor atribuido ainda)
  });
}

//metodo para salvar dados no SharedPreferences
  void savePreferences() async{
    setState(() {
      _darkMode = !_darkMode; //inverte o valor da booleana
    }); 
  await _prefs.setBool("darkMode", _darkMode); // atribuindo o valor da variavel _darkMode a chave do darkMode shared


  @override
  // ignore: unused_element
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text("Modo escuro com SharedPreferences"),),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Text("Tema Atual: ${_darkMode ? "Escuro" : "Claro"}"),
              Switch(value: _darkMode, onChanged: (_)=> savePreferences())
          ],
        ),
      ),
    );
  }
}

  @override
  Widget build(BuildContext context) {
    // TODO: implement build
    throw UnimplementedError();
  }}