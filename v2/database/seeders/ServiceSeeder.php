<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::truncate();
        
        Service::create([
            'libelle_service' => 'Développement d\'applications',
            'description_service' => 'Développement d\'applications mobiles et web',
            'slug_service' => Str::slug('Développement d\'applications'),
            'unique' => 'DA',
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/developpement_applications.jpg',
            'details_service' => 'Détails supplémentaires sur le développement d\'applications',
            'groupe_service_id' => 1, // Remplacez par lID de groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID d'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);

        Service::create([
            'libelle_service' => 'Soutien et maintenance de produits',
            'description_service' => 'Soutien et maintenance continue des produits logiciels',
            'slug_service' => Str::slug('Soutien et maintenance de produits'),
            'unique' => 'SMP',
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/soutien_maintenance.jpg',
            'details_service' => 'Détails supplémentaires sur le soutien et la maintenance de produits',
            'groupe_service_id' => 1, // Remplacez par l'ID de groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID d'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);

        Service::create([
            'libelle_service' => 'Modernisation des applications',
            'description_service' => 'Modernisation et transformation des applications existantes',
            'slug_service' => Str::slug('Modernisation des applications'),
            'unique' => 'MA',
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur la modernisation des applications',
            'groupe_service_id' => 2, // Remplacez par l'ID de groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID d'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        Service::create([
            'libelle_service' => 'Tests manuels',
            'description_service' => 'Tests manuels',
            'slug_service' => Str::slug('Tests manuels'),
            'unique' => Str::slug('Tests manuels'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur les tests manuels',
            'groupe_service_id' => 2, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Test Automation',
            'description_service' => 'Test Automation',
            'slug_service' => Str::slug('Test Automation'),
            'unique' => Str::slug('Test Automation'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur la modernisation des applications',
            'groupe_service_id' => 2, // Remplacez par l'ID de groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID d'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        Service::create([
            'libelle_service' => 'Tests de performance',
            'description_service' => 'Tests de performance',
            'slug_service' => Str::slug('Tests de performance'),
            'unique' => Str::slug('Tests de performance'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur les tests de performance',
            'groupe_service_id' => 2, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Tests d\'API',
            'description_service' => 'Tests d\'API',
            'slug_service' => Str::slug("Tests d'API"),
            'unique' => Str::slug('Tests d\'API'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur les tests d\'API',
            'groupe_service_id' => 2, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Migration vers le Cloud',
            'description_service' => 'Migration vers le Cloud',
            'slug_service' => Str::slug('Migration vers le Cloud'),
            'unique' => Str::slug('Migration vers le Cloud'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur la migration vers le Cloud',
            'groupe_service_id' => 3, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        

        Service::create([
            'libelle_service' => 'Infogérance Cloud',
            'description_service' => 'Infogérance Cloud',
            'slug_service' => Str::slug('Infogérance Cloud'),
            'unique' => Str::slug('Infogérance Cloud'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/infogérance_icloud.jpg',
            'details_service' => 'Détails supplémentaires sur l"Infogérance Cloud',
            'groupe_service_id' => 3, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Intégration cloud',
            'description_service' => 'Intégration cloud',
            'slug_service' => Str::slug('Intégration cloud'),
            'unique' => Str::slug('Intégration cloud'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/modernisation_applications.jpg',
            'details_service' => 'Détails supplémentaires sur l\'intégration cloud',
            'groupe_service_id' => 3, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Sécurité et surveillance du cloud',
            'description_service' => 'Sécurité et surveillance du cloud',
            'slug_service' => Str::slug('Sécurité et surveillance du cloud'),
            'unique' => Str::slug('Sécurité et surveillance du cloud'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur la sécurité et la surveillance du cloud',
            'groupe_service_id' => 3, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        

        Service::create([
            'libelle_service' => 'Évaluation DevOps et planification de la feuille de route',
            'description_service' => 'Évaluation DevOps et planification de la feuille de route',
            'slug_service' => Str::slug('Évaluation DevOps et planification de la feuille de route'),
            'unique' => Str::slug('Évaluation DevOps et planification de la feuille de route'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur l\'Évaluation DevOps et la planification de la feuille de route',
            'groupe_service_id' => 4, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Containerisation',
            'description_service' => 'Containerisation',
            'slug_service' => Str::slug('Containerisation'),
            'unique' => Str::slug('Containerisation'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur la containerisation',
            'groupe_service_id' => 4, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Gestion de la configuration DevOps',
            'description_service' => 'Gestion de la configuration DevOps',
            'slug_service' => Str::slug('Gestion de la configuration DevOps'),
            'unique' => Str::slug('Gestion de la configuration DevOps'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur la gestion de la configuration DevOps',
            'groupe_service_id' => 4, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        

        Service::create([
            'libelle_service' => 'CI/CD',
            'description_service' => 'Intégration Continue et Déploiement Continu',
            'slug_service' => Str::slug('CI/CD'),
            'unique' => Str::slug('CI/CD'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur l\'Intégration Continue et le Déploiement Continu',
            'groupe_service_id' => 4, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Sécurité DevOps',
            'description_service' => 'Sécurité DevOps',
            'slug_service' => Str::slug('Sécurité DevOps'),
            'unique' => Str::slug('Sécurité DevOps'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur la Sécurité DevOps',
            'groupe_service_id' => 4, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
        Service::create([
            'libelle_service' => 'Ingénierie de Fiabilité des Sites',
            'description_service' => 'Ingénierie de Fiabilité des Sites',
            'slug_service' => Str::slug('Ingénierie de Fiabilité des Sites'),
            'unique' => Str::slug('Ingénierie de Fiabilité des Sites'),
            'prix_service' => 0.00,
            'duree_service' => 'Variable',
            'disponible' => true,
            'image_service' => 'Services/Cloud_Security_and_Monitoring.jpg',
            'details_service' => 'Détails supplémentaires sur l\'Ingénierie de Fiabilité des Sites',
            'groupe_service_id' => 4, // Remplacez par l'ID du groupe de service associé
            'date_debut' => null,
            'date_fin' => null,
            'caracteristiques' => null,
            'avantages' => null,
            'actived' => '1',
            'user_id' => 1, // Remplacez par l'ID de l'utilisateur associé
            'migration' => '0',
            'online' => '1',
        ]);
        
    }
}
