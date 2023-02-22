from Mahasiswa import Mahasiswa


class Akademik(Mahasiswa):
    def __init__(self, nim="", prodi="", fakultas="", kampus="", email="", telp=""):
        super().__init__(nim, prodi, fakultas)
        self.__kampus = kampus
        self.__email = email
        self.__telp = telp

    # Setter & Getter
    def setKampus(self, kampus):
        self.__kampus = kampus

    def getKampus(self):
        return self.__kampus

    def setEmail(self, email):
        self.__email = email

    def getEmail(self):
        return self.__email

    def setTelp(self, telp):
        self.__telp = telp

    def getTelp(self):
        return self.__telp
