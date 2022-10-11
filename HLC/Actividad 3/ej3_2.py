# Para tributar un determinado impuesto se debe ser mayor de 16 años y
# tener unos ingresos iguales o superiores a 1000 € mensuales. Escribir un
# programa que pregunte al usuario su edad y sus ingresos mensuales y
# muestre por pantalla si el usuario tiene que tributar o no.

age = int(input("Buenas, introduce tu edad: "))
incomes = float(input("Introduce tus ingresos mensuales: "))

if age < 16:
    print("No tienes que tributar porque eres menor de 16 años.")
else:
    if incomes < 1000:
        print(
            "No tienes que tributar porque tus ingresos mensuales no sobrepasan los 1000€.")
    else:
        print("Tienes que tributar.")
