# 202. El programa no funcionará bien con cualquier carta. Por ejemplo, si la variable texto
# vale "Hola =A. =" el programa falla. ¿Por qué? ¿Sabrías corregir el programa?

remitente = 'al00000@aluimail.uji.es'
texto = "Estimado =S =A. ="
texto += "Por la presente le informamos de que usted nos debe la "
texto += "cantidad de =E euros. Si no abona dicha cantidad antes "
texto += "de 3 días, su nombre pasará a nuestra lista de morosos."

seguir = 's'
while seguir == 's':
    destinatario = input('Correo electrónico del destinatario: ')
    tratamiento = input('Tratamiento: ')
    apellido = input("Apellido: ")
    euros = input('Deuda (en euros): ')

    mensaje = f"From: {remitente}\nTo: {destinatario}\n\n"

    personalizado = ''
    i = 0
    while i < len(texto):
        if texto[i] != '=':
            personalizado += texto[i]
        else:
            if texto[i+1] == 'A':
                personalizado += apellido
                i += 1
            elif texto[i+1] == 'E':
                personalizado += euros
                i += 1
            elif texto[i+1] == 'S':
                personalizado += tratamiento
                i += 1
            # Quitamos else final ya que nos añade un = por error
            # else:
            #     personalizado += '='
        i += 1

    mensaje += personalizado

    print(mensaje)

    seguir = input("Si desea enviar otro correo, pulsa 's': ")