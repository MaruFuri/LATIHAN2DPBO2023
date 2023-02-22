class Human:
    def __init__(self, nik="", name="", gender=""):
        self.nik = nik
        self.name = name
        self.gender = gender

    # Setter & Getter
    def setNIK(self, nik):
        self.nik = nik

    def getNIK(self):
        return self.nik

    def setName(self, name):
        self.name = name

    def getName(self):
        return self.name

    def setGender(self, gender):
        self.gender = gender

    def getGender(self):
        return self.gender
