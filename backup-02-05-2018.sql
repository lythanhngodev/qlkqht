create table NGUOIQUANTRI
(
  MANQT    VARCHAR2(20) not null
    constraint NGUOIQUANTRI_PK
    primary key,
  HOTENNQT NVARCHAR2(50),
  SDTNQT   VARCHAR2(20),
  EMAILNQT VARCHAR2(50),
  MATKHAU  VARCHAR2(50)
)
/

create table CBPDT
(
  MACBPDT    VARCHAR2(20) not null
    constraint CBPDT_PK
    primary key,
  HOTENCBPDT NVARCHAR2(50),
  SDTCBPDT   VARCHAR2(20),
  EMAILCBPDT VARCHAR2(50),
  MATKHAU    VARCHAR2(50)
)
/

create table KHOACM
(
  MAKHOA  VARCHAR2(20) not null
    constraint KHOACM_PK
    primary key,
  TENKHOA NVARCHAR2(50),
  SDTKHOA VARCHAR2(20)
)
/

create table GIANGVIEN
(
  MAGV    VARCHAR2(20) not null
    constraint GIANGVIEN_PK
    primary key,
  MAKHOA  VARCHAR2(20) not null
    constraint GIANGVIEN_FK_KHOACM
    references KHOACM,
  HOTENGV NVARCHAR2(50),
  SDTGV   NVARCHAR2(20),
  EMAILGV VARCHAR2(50),
  MATKHAU VARCHAR2(50)
)
/

create table MONHOC
(
  MAMH     VARCHAR2(20) not null
    constraint MONHOC_PK
    primary key,
  TENMH    NVARCHAR2(50),
  SOTINCHI NUMBER,
  SOTCLT   NUMBER,
  SOTCTH   NUMBER,
  HESOQT   NUMBER,
  HESOGK   NUMBER,
  HESOCK   NUMBER,
  MAKHOA   VARCHAR2(20) not null
    constraint MONHOC_FK_KHOACM
    references KHOACM
)
/

create table HEDAOTAO
(
  MAHDT      VARCHAR2(20) not null
    constraint HEDAOTAO_PK
    primary key,
  TENHDT     NVARCHAR2(50),
  THOIGIANDT NVARCHAR2(10)
)
/

create table NGANHDAOTAO
(
  MANDT  VARCHAR2(20) not null
    constraint NGANHDAOTAO_PK
    primary key,
  MAKHOA VARCHAR2(20) not null
    constraint NGANHDAOTAO_FK_KHOACM
    references KHOACM,
  TENNDT NVARCHAR2(50),
  MAHDT  VARCHAR2(20) not null
    constraint NGANHDAOTAO_FK_HEDT
    references HEDAOTAO
)
/

create table KHOAHOC
(
  MAKHOAHOC  VARCHAR2(20) not null
    constraint KHOAHOC_PK
    primary key,
  TENKHOAHOC NVARCHAR2(50),
  NAMBDKH    NUMBER,
  NAMKTKH    NUMBER,
  MAHDT      VARCHAR2(20) not null
    constraint KHOAHOC_FK_HEDT
    references HEDAOTAO
)
/

create table LOP
(
  MALOP     VARCHAR2(20) not null
    constraint LOP_PK
    primary key,
  MAKHOA    VARCHAR2(20) not null
    constraint LOP_FK_KHOACM
    references KHOACM,
  MAKHOAHOC VARCHAR2(20) not null
    constraint LOP_FK_KHOAHOC
    references KHOAHOC,
  MAGV      VARCHAR2(20) not null
    constraint LOP_FK_GV
    references GIANGVIEN,
  TENLOP    NVARCHAR2(50),
  MANDT     VARCHAR2(20) not null
    constraint LOP_FK_NGANHDT
    references NGANHDAOTAO
)
/

create table SINHVIEN
(
  MASV       VARCHAR2(20) not null
    constraint SINHVIEN_PK
    primary key,
  HOTENSV    NVARCHAR2(50),
  NGAYSINHSV DATE,
  GIOITINHSV NVARCHAR2(4),
  EMAILSV    VARCHAR2(50),
  QUEQUANSV  NVARCHAR2(50),
  MATKHAU    VARCHAR2(50),
  MALOP      VARCHAR2(20) not null
    constraint SINHVIEN_FK_LOP
    references LOP,
  MANDT      VARCHAR2(20) not null
    constraint SINHVIEN_FK_NGANHDT
    references NGANHDAOTAO
)
/

create table LOPHOCPHAN
(
  MALHP  VARCHAR2(20) not null
    constraint LOPHOCPHAN_PK
    primary key,
  MALOP  VARCHAR2(20) not null
    constraint LOPHOCPHAN_FK_LOP
    references LOP,
  MAGV   VARCHAR2(20) not null
    constraint LOPHOCPHAN_FK_GV
    references GIANGVIEN,
  MAMH   VARCHAR2(20) not null
    constraint LOPHOCPHAN_FK_MONHOC
    references MONHOC,
  TENLHP NVARCHAR2(50)
)
/

create table HOCKY
(
  MAHK  VARCHAR2(20) not null
    constraint HOCKY_PK
    primary key,
  TENHK NVARCHAR2(50),
  NAMBD NUMBER,
  NAMKT NUMBER
)
/

create table DIEMHOCPHAN
(
  MASV       VARCHAR2(20) not null
    constraint DIEMHOCPHAN_FK_SV
    references SINHVIEN,
  MAMH       VARCHAR2(20) not null
    constraint DIEMHOCPHAN_FK_MONHOC
    references MONHOC,
  MAHK       VARCHAR2(20) not null
    constraint DIEMHOCPHAN_FK_HOCKY
    references HOCKY,
  DIEMQT     FLOAT,
  DIEMGK     FLOAT,
  DIEMCK     FLOAT,
  DIEMTHILAI FLOAT,
  TONGDIEM   FLOAT,
  DIEMHS4    FLOAT,
  DIEMCHU    VARCHAR2(1),
  constraint DIEMHOCPHAN_PK
  primary key (MASV, MAMH)
)
/

create table DIEMTONGHOP
(
  MASV           VARCHAR2(20) not null
    constraint DIEMTONGHOP_FK_SV
    references SINHVIEN,
  MALOP          VARCHAR2(20) not null
    constraint DIEMTONGHOP_FK_LOP
    references LOP,
  MAHK           VARCHAR2(20) not null
    constraint DIEMTONGHOP_FK_HOCKY
    references HOCKY,
  DIEMTKLAN1     FLOAT,
  DIEMTKLAN2     FLOAT,
  DIEMTKCUOICUNG FLOAT,
  DIEMTKHS4      FLOAT,
  DIEMCHU        VARCHAR2(1),
  XEPLOAI        NVARCHAR2(20),
  constraint DIEMTONGHOP_PK
  primary key (MASV, MALOP)
)
/

