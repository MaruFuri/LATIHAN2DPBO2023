from Human import Human


class Mahasiswa(Human):
    def __init__(self, nik="", name="", gender="", nim="", prodi="", fakultas=""):
        super().__init__(nik, name, gender)
        self.nim = nim
        self.prodi = prodi
        self.fakultas = fakultas

    # Setter & Getter
    def setNIM(self, nim):
        self.__nim = nim

    def getNIM(self):
        return self.__nim

    def setProdi(self, prodi):
        self.__prodi = prodi

    def getProdi(self):
        return self.__prodi

    def setFakultas(self, fakultas):
        self.__fakultas = fakultas

    def getFakultas(self):
        return self.__fakultas
