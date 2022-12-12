void main() {
  String nome = "Larnaja";
  double peso = 100.5;
  String cor = "Verde e Amarela";
  String sabor = "Docinha";
  int diasDesdeColheita = 40;
  bool isMadura = funcEstaMadura(diasDesdeColheita);

  //List<dynamic> fruta01 = ["Laranja", 50, "Laranja", 10];

  Fruta fruta01 = Fruta(nome, peso, cor, sabor, diasDesdeColheita);
  Fruta fruta02 = Fruta("Uva", 40, "Verde", "Doce", 20);

  print(fruta01.nome);
  //mostrarMadura("Kiwi", 35, cor: "Roxa");
  //int quantosDias = funcQuantosDiasMadura(diasDesdeColheita);
  //print(quantosDias);
}

class Fruta {
  String nome;
  double peso;
  String cor;
  String sabor;
  int diasDesdeColheita;
  bool? isMadura;
  Fruta(this.nome, this.peso, this.cor, this.sabor, this.diasDesdeColheita,
      {this.isMadura});
}

funcQuantosDiasMadura(int dias) {
  int diasParaMadura = 30;
  int quantosDiasFaltam = diasParaMadura - dias;
  return quantosDiasFaltam;
}

mostrarMadura(String nome, int dias, {required String cor}) {
  if (dias >= 30) {
    print("A $nome não está madura.");
  } else {
    print("A $nome está madura!");
  }

  if (cor != null) {
    print("A $nome é $cor");
  }
}

bool funcEstaMadura(int dias) {
  if (dias >= 30) {
    return true;
  } else {
    return false;
  }
}
