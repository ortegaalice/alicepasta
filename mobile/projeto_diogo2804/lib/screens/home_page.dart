import 'package:flutter/material.dart';
import 'main_page.dart'; // Importa a página principal para onde o botão vai levar

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      // Usamos o body com SingleChildScrollView para garantir que funcione em celulares pequenos
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.symmetric(horizontal: 20, vertical: 60),
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            crossAxisAlignment: CrossAxisAlignment.center,
            children: [
              // 1. Título do Aplicativo
              Text(
                "EcoApp",
                style: TextStyle(
                  fontSize: 40,
                  fontWeight: FontWeight.bold,
                  color: Colors.green.shade700,
                ),
              ),
              const SizedBox(height: 20),

              // 2. Imagem/Ilustração (Conforme solicitado no objetivo do trabalho)
              // Você pode usar o link de uma imagem de sustentabilidade
              ClipRRect(
                borderRadius: BorderRadius.circular(20),
                child: Image.network(
                  "https://img.freepik.com/vetores-gratis/conceito-de-ecologia-de-design-plano-com-pessoas-cuidando-da-terra_23-2148439561.jpg",
                  height: 300,
                  fit: BoxFit.cover,
                ),
              ),
              
              const SizedBox(height: 30),

              // 3. Breve descrição da proposta
              const Text(
                "Bem-vindo ao seu guia de sustentabilidade!",
                textAlign: TextAlign.center,
                style: TextStyle(fontSize: 22, fontWeight: FontWeight.w600),
              ),
              const SizedBox(height: 15),
              Text(
                "Acompanhe seus hábitos sustentáveis e veja seu impacto positivo no planeta. Pequenas ações geram grandes mudanças.",
                textAlign: TextAlign.center,
                style: TextStyle(fontSize: 16, color: Colors.grey.shade600),
              ),

              const SizedBox(height: 50),

              // 4. Botão para acessar a aplicação (Navegação)
              SizedBox(
                width: double.infinity,
                height: 55,
                child: ElevatedButton(
                  style: ElevatedButton.styleFrom(
                    backgroundColor: Colors.green,
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(10),
                    ),
                  ),
                  onPressed: () {
                    // Navega para a MainPage e remove a Home da pilha (pushReplacement)
                    Navigator.pushReplacement(
                      context,
                      MaterialPageRoute(builder: (context) => MainPage()),
                    );
                  },
                  child: const Text(
                    "ACESSAR APP",
                    style: TextStyle(
                      color: Colors.white,
                      fontSize: 18,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                ),
              ),
              
              const SizedBox(height: 20),
              
              // Opcional: Simulação de login simples (como mencionado no PDF)
              TextButton(
                onPressed: () {},
                child: const Text("Criar conta ou Entrar"),
              ),
            ],
          ),
        ),
      ),
    );
  }
}