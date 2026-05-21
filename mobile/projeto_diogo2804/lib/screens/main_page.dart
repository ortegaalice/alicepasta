import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'habito_provider.dart';

class MainPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    var p = Provider.of<HabitoProvider>(context);

    // Lista de telas simples para o corpo
    final telas = [
      Center(child: Text("Hábitos Feitos: ${p.lista.where((h)=>h.feito).length}")), // Dashboard simples
      TelaHabitos(), 
      Center(child: Text("Configurações")),
    ];

    return Scaffold(
      appBar: AppBar(title: Text("EcoApp"), backgroundColor: Colors.green),
      drawer: Drawer(
        child: Column(children: [
          DrawerHeader(child: Icon(Icons.eco, size: 50, color: Colors.green)),
          ListTile(title: Text("Início"), onTap: () => p.trocarAba(0)),
          ListTile(title: Text("Hábitos"), onTap: () => p.trocarAba(1)),
        ]),
      ),
      body: telas[p.abaAtiva],
      bottomNavigationBar: BottomNavigationBar(
        currentIndex: p.abaAtiva,
        onTap: (i) => p.trocarAba(i),
        items: [
          BottomNavigationBarItem(icon: Icon(Icons.home), label: "Home"),
          BottomNavigationBarItem(icon: Icon(Icons.list), label: "Hábitos"),
          BottomNavigationBarItem(icon: Icon(Icons.settings), label: "Ajustes"),
        ],
      ),
    );
  }
}