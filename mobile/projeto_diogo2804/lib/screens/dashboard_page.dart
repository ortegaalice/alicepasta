import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../providers/habito_provider.dart';

class DashboardPage extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    final provider = Provider.of<HabitoProvider>(context);

    return Padding(
      padding: EdgeInsets.all(16),
      child: GridView.count(
        crossAxisCount: 1, // Um card por linha para ficar igual ao seu print
        childAspectRatio: 3,
        mainAxisSpacing: 10,
        children: [
          _cardDashboard("Hábitos feitos", "${provider.concluidos.length}"),
          _cardDashboard("Hábitos a fazer", "${provider.pendentes.length}"),
          _cardDashboard("Impacto Estimado", "Alto", cor: Colors.green),
        ],
      ),
    );
  }

  Widget _cardDashboard(String titulo, String valor, {Color cor = Colors.black}) {
    return Card(
      elevation: 4,
      child: Center(
        child: ListTile(
          leading: Icon(Icons.access_time, size: 40),
          title: Text(valor, style: TextStyle(fontSize: 24, fontWeight: FontWeight.bold, color: cor)),
          subtitle: Text(titulo),
        ),
      ),
    );
  }
} 


