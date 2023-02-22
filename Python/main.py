from Human import Human
from Mahasiswa import Mahasiswa
from Akademik import Akademik

# Membuat objek berisi atributnya masing-masing
mhs = Mahasiswa()
mhs.setNIM("2101310")
mhs.setProdi("Ilmu Komputer")
mhs.setFakultas("FPMIPA")
human = Human("1313144881", "Akmal Zulkifli", "Laki-laki")
akademik = Akademik("2101310", "Ilmu Komputer", "FPMIPA",
                    "UPI", "akmalzulkifli29@upi.edu", "08567655880")

# Melakukan print
print("Data Mahasiswa:")
print("NIK:", human.getNIK())
print("Nama:", human.getName())
print("Email:", akademik.getEmail())
print("Telp:", akademik.getTelp())
print("Jenis Kelamin:", human.getGender())
print("NIM:", mhs.getNIM())
print("Program Studi:", mhs.getProdi())
print("Fakultas:", mhs.getFakultas())
print("Kampus:", akademik.getKampus())
