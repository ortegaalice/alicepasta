import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../providers/habito_provider.dart';

class HabitosPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
      length: 2,
      child: Scaffold(
        appBar: TabBar(
          labelColor: Colors.green,
          tabs: [Tab(text: "Pendentes"), Tab(text: "Concluído")],
        ),
        body: TabBarView(
          children: [
            _listaHabitos(context, true),
            _listaHabitos(context, false),
          ],
        ),
      ),
    );
  }

  Widget _listaHabitos(BuildContext context, bool pendentes) {
    final provider = Provider.of<HabitoProvider>(context);
    final lista = pendentes ? provider.pendentes : provider.concluidos;

    return ListView.builder(
      itemCount: lista.length,
      itemBuilder: (ctx, i) => Card(
        margin: EdgeInsets.all(10),
        child: ListTile(
          title: Text(lista[i].titulo),
          subtitle: Text(lista[i].descricao),
          trailing: ElevatedButton(
            onPressed: () => provider.completarHabito(lista[i]),
            child: Text(pendentes ? "Concluir" : "Refazer"),
          ),
        ),
      ),
    );
  }
}