class Vehiculo:
    def info(self):
        return "Información Vehículo"

    def matricula(self):
        return "Matrícula Vehículo"


class Coche(Vehiculo):
    def info(self):
        return "Información Coche"


v1 = Vehiculo()
v2 = Coche()
print(v2.matricula())
print(v2.info())
print(v1.info())
