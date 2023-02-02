$("#create_order_btn").on('click',function(){
        // Variables
    let patientName = $("#patient-recept-name").val();
    let patientSName = $("#patient-recept-secname").val();
    let patientLName = $("#patient-recept-lastname").val();
    let patientBorn = $("#patient-recept-birth").val();
    let receptDate = $("#doctor-recept-date").val();
    let receptTime = $("#doctor-recept-time").val();
    let doctorSpec = $("#recept-spec").val();
    let doctorSFL = $("#recept-doctor").val();
    let doctorCab = $("#doctor_cab").val();

    let firstLeName = $("#patient-recept-name").val().substring(0, 1);
    let firstLeLName = $("#patient-recept-lastname").val().substring(0, 1);

    let dd = {
        info: {
            title: 'Талон на прием к врачу',
            author: 'Denisto',
            subject: 'Талон на прием к врачу',
            keywords: 'Официальный сайт: nt-ms.ru',
            application: 'Visual Studio Code'
        },
        pageSize: {
            width: 795.28,
            height: 510
        },
        pageMargins: [20, 10, 20, 10],
        watermark: {text: 'nt-mc.ru', angle: 35, opacity: 0.2, fontSize: 20},
        alignment: 'center',
        content: [
                // Шапка документа
            {
                text: 'Запись на приём к врачу произведена успешно!',
                fontSize: 20,
                alignment: 'center',
                margin: [20, 10, 20, 20]
            },
                // Данные о больнице
            {
                fontSize: 16,
                alignment: 'center',
                text: 'ООО "Нижнетагильский Медицинский центр"'
            },
            {
                fontSize: 16,
                alignment: 'center',
                text: 'г. Нижний Тагил, ул. Черемшанская, 3',
                margin: [0, 0, 0, 30]
            },
                // Данные о пациенте
            // ФИО 
            {
                fontSize: 16,
                alignment: 'center',
                margin: [156, 0, 0, 10],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'Пациент'
                    },
                    {
                        width: '220',
                        alignment: 'left',
                        text: patientSName + " " + patientName + " " + patientLName,
                        bold: true
                    }
                ],
                columnGap: 92,
            },
            // Дата Рождения
            {
                fontSize: 16,
                alignment: 'center',
                margin: [156, 0, 0, 30],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'Дата рождения'
                    },
                    {
                        width: '220',
                        alignment: 'left',
                        text: patientBorn,
                        bold: true
                    }
                ],
                columnGap: 40,
            },
                // Данные о записи
            // Дата приема
            {
                fontSize: 16,
                alignment: 'center',
                margin: [156, 0, 0, 10],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'Дата приема'
                    },
                    {
                        width: '220',
                        alignment: 'left',
                        text: receptDate,
                        bold: true
                    }
                ],
                columnGap: 60,
            },
            // Время приема
            {
                fontSize: 16,
                alignment: 'center',
                margin: [156, 0, 0, 10],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'Время приема'
                    },
                    {
                        width: '220',
                        alignment: 'left',
                        text: receptTime,
                        bold: true
                    }
                ],
                columnGap: 49,
            },
            // Специальность врача
            {
                fontSize: 16,
                alignment: 'center',
                margin: [156, 0, 0, 10],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'Специалист'
                    },
                    {
                        width: '220',
                        alignment: 'left',
                        text: doctorSpec,
                        bold: true
                    }
                ],
                columnGap: 69,
            },
            // ФИО Врача
            {
                fontSize: 16,
                alignment: 'end',
                margin: [156, 0, 0, 10],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'ФИО Специалиста'
                    },
                    {
                        width: '220',
                        alignment: 'end',
                        text: doctorSFL,
                        bold: true
                    }
                ],
                columnGap: 22,
            },
            // Кабинет Врача
            {
                fontSize: 16,
                alignment: 'end',
                margin: [156, 0, 0, 10],
                columns: [
                    {
                        width: 'auto',
                        alignment: 'center',
                        text: 'Кабинет '
                    },
                    {
                        width: '220',
                        alignment: 'end',
                        text: "№" + doctorCab,
                        bold: true
                    }
                ],
                columnGap: 97,
            },
                // Важная информация
            {
                fontSize: 18,
                alignment: 'center',
                italics: true,
                margin: [50, 40, 50, 0],
                text: 'Если вы не можете прийти на прием в указанное время, сообщите об этом по телефону (3435) 230-310 или отмените запись на сайте',
                width: '120'
            },
            {
                color: 'blue',
                fontSize: 18,
                alignment: 'center',
                text: 'nt-mc.ru',
                link: 'https://nt-mc.ru'
            }
        ],
        footer: {
            text: 'footer'
        }
    };
    pdfMake.createPdf(dd).open();
    pdfMake.createPdf(dd).download(patientSName + ' ' + firstLeName + '. ' + firstLeLName + ' Талон(' + receptDate + ').pdf');
});
    