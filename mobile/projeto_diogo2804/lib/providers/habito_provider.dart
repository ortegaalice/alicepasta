import 'package:flutter/material.dart';
import '../models/habito.dart';

class HabitoProvider with ChangeNotifier {
  // Lista inicial de hábitos
  final List<Habito> _habitos = [
    Habito(titulo: "Economizar Água", descricao: "Banho de 5 min"),
    Habito(titulo: "Reciclagem", descricao: "Separar plástico e papel"),
    Habito(titulo: "Luzes", descricao: "Apagar luzes ao sair"),
  ];

  int _abaAtual = 0;
  int get abaAtual => _abaAtual;

  List<Habito> get pendentes => _habitos.where((h) => !h.concluido).toList();
  List<Habito> get concluidos => _habitos.where((h) => h.concluido).toList();

  void mudarAba(int index) {
    _abaAtual = index;
    notifyListeners();
  }

  void completarHabito(Habito habito) {
    habito.concluido = !habito.concluido;
    notifyListeners(); // Atualiza Dashboard e Listas automaticamente
  }

  void resetarTudo() {
    for (var h in _habitos) { h.concluido = false; }
    notifyListeners();
  }
}
 