<?php

namespace App\Diplome;

use Fpdf\Fpdf;
use Illuminate\Support\Facades\Storage;

class PSC1 extends Fpdf
{
    public string $code;
    public string $date;
    public string $firstname;
    public string $lastname;
    public string $city;
    public string $birthdate;

    public function __construct($firstname, $lastname, $city, $birthdate, $date, $code)
    {
        parent::__construct(orientation: 'L', unit: 'mm', size: 'A4');

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->city = $city;
        $this->birthdate = $birthdate;
        $this->date = $date;
        $this->code = $code;
    }

    public function render(): string
    {
        $this->SetTitle(utf8_decode("Diplôme PSC1"));

        $this->SetMargins(10, 10);
        $this->SetTextColor(0);
        $this->SetFont('Helvetica', '', 7);

        $this->AddPage();

        $this->Image(Storage::disk('public')->path('ministere.jpg'), 10, 10, 16);
        $this->Image(Storage::disk('public')->path('2a-formation.jpg'), 257, 10, 30);

        $this->setXY(30, 12);
        $this->setTextColor(100);
        $this->setFont('Helvetica', 'B', 10);
        $this->cell(227, 6, utf8_decode("Délégation Départementale de Corse-du-Sud (2A)"), 0, 2, 'C');

        $this->setFont('Helvetica', '', 8);
        $this->MultiCell(227, 4, utf8_decode("Lieu-dit Alivella 20129 Bastelicaccia\nMail: contact2aformation@gmail.com\nTel: 06 21 97 23 72"), 0, 'C');

        $this->setXY(75, 50);
        $this->setTextColor(0);
        $this->setFont('Helvetica', 'B', 18);
        $this->MultiCell(147, 8, strtoupper(utf8_decode("Certificat de competences de citoyen de securite civile - PSC1")), 0, 'C');

        $this->setXY(10, 70);
        $this->setTextColor(0);
        $this->setFont('Helvetica', '', 9);
        $this->MultiCell(277, 5, utf8_decode("
Vu l'arrêté du 8 juillet 1992 modifié relatif aux conditions d'habilitations ou d'agréments pour les formations aux premiers secours;
Vu l'arrêté du 24 juillet 2007 modifié, fixant le référentiel national de compétences de sécurité civile relatif à l'unité d'enseignement « Prévention et Secours Civiques de niveau 1 »;
Vu la décision d'agrément n° AN34-PSC-38-2023-2026 délivrée le 20 février 2023 relative au référentiels internes de formation et de certification à l'unité d'enseignement « Prévention et Secours Civiques de niveau 1 » de la FNEDS;
Vu le procès-verbal de formation en date du ".$this->date.";
        "));

        $this->ln();

        $this->setFont('Helvetica', 'B', 10);
        $this->cell(277, 6, utf8_decode("Le président de l'association 2AFORMATION,"), 0, 2);

        $this->setFont('Helvetica', '', 10);
        $this->setXY(30, $this->getY() + 5);
        $this->MultiCell(237, 5, utf8_decode("
déclarant que ".$this->firstname." ".$this->lastname.", né(e) le ".$this->birthdate." à ".$this->city.", remplit les conditions exigées pour l'obtention du certificat de compétences de citoyen de sécurité civile, conformément aux dispositions de l'arrêté du 24 juillet 2007 modifié susvisé,
délivre à ".$this->firstname." ".$this->lastname." le présent certificat de compétences.
        "), 0, 'C');

        $this->setFont('Helvetica', '', 9);
        $this->setY(170);
        $this->cell(100, 5, utf8_decode("Fait à Ajaccio, le ".$this->date));
        $this->setX(187);
        $this->setFont('Helvetica', 'I', 9);
        $this->cell(100, 5, utf8_decode("Le Délégué départemental de Corse-du-Sud"), 0, 0, 'R');

        $this->Image(Storage::disk('public')->path('signature.png'), 245, 175, 20);

        $this->setXY(30, 185);
        $this->setTextColor(100);
        $this->setFont('Helvetica', 'I', 7);
        $this->cell(227, 4, utf8_decode("Il ne sera pas délivré de duplicata du présent certificat"), 0, 2, 'C');

        $this->setTextColor(0);
        $this->setFont('Helvetica', '', 7);
        $this->text(10, 200, $this->code);

        return $this->output('S');
    }
}
