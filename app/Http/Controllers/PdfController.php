<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function htmlToPdf()
    {
        $data = [
            "title" => "Ai-Powered Self-Service Digitalization with CLaaS®",
            "company" => "ABC Pte Ltd",
            "date" => date("m/d/Y"),
            "contents" => [
                "Self-Service Digitalization -- Executive Brief",
                "Digital Acceleration Index (IMDA-BCG)",
                // ... other content items
            ],
            "executiveBrief" => "Digitalization is no longer an option. It's a necessity...",
            "digitalAccelerationIndex" => "Content for Digital Acceleration Index...",
            "digitalizationGoals" => [
                "AI Powered Data and Technology",
                "Digitally Affluent Workforce",
                // ... other goals
            ],
            "claasDescription" => "CLaaS@WORK delivers work-integrated skilling without compromising work...",
            "fundingInfo" => "Information about SkillsFuture and Workforce SG funding...",
            "companyProfile" => "Poh Heng Jewellery, established in 1948, is one of Singapore's most prestigious...",
            "digitalAccelerationAssessment" => "Analysis of the Digital Maturity Survey...",
            "goalsAndStrategies" => [
                "Personalized Customer Journey",
                "Agile Product & Operations Efficiency",
                // ... other goals and strategies
            ],
            "technologyNeeds" => [
                "Microsoft Power Apps",
                "Microsoft Power BI",
                // ... other technology needs
            ],
            "skillingNeeds" => [
                "Sales, Marketing & Customer Service" => ["Solution Sales", "Digital Marketing", /* ... */],
                "Products & Operations" => ["Microsoft ERP", "Agile Management", /* ... */],
                // ... other business functions
            ],
            "capabilitiesNeeds" => [
                "Sales, Marketing & Customer Service" => ["Omni-Channel Campaigns Project", "CRM Implementation Project", /* ... */],
                "Products & Operations" => ["ERP Implementation Project", "Agile Management Project", /* ... */],
                // ... other business functions
            ],
            "skillingPlan" => [
                ["name" => "Solution Sales", "hours" => 60.5, "description" => "..."],
                ["name" => "Digital Marketing", "hours" => 60.5, "description" => "..."],
                // ... other skilling plans
            ],
            "capabilitiesProject" => [
                ["name" => "Omni-Channel Campaigns Project", "hours" => 100, "description" => "..."],
                ["name" => "CRM Implementation Project", "hours" => 100, "description" => "..."],
                // ... other capabilities projects
            ],
            "pricingPlan" => [
                ["function" => "Sales, Marketing & Customer Service", "skilling" => "Solution Sales", "pax" => 1, "costPerPax" => 3000.00, "totalCost" => 3000.00],
                // ... other pricing items
            ],
            "fundingSupport" => "Details about funding support from SSG and WSG...",
        ];

        $pdf = Pdf::loadView("pdfinvoice", $data);
        return $pdf->stream();
    }
}