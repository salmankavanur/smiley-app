<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->truncate();

        $services = [
            [
                'title' => 'Steam Ironing',
                'slug' => 'steam-ironing-service-manjeri',
                'description' => 'Crisp and wrinkle-free finishing for your daily wear.',
                'content' => '<p>Look sharp every day with Smiley Dry Cleaning\'s <strong>premium steam ironing service in Manjeri</strong>. We use industrial-grade steam press machines to ensure your clothes are crisp, wrinkle-free, and perfectly finished. Unlike regular ironing, steam ironing protects the fabric integrity while removing stubborn creases.</p><h3>Why Choose Our Steam Ironing?</h3><ul><li>Antibacterial steam treatment</li><li>Prevents fabric burns and shine marks</li><li>Perfect for office wear, shirts, and trousers</li><li>Fast turnaround time</li></ul>',
                'icon' => 'iron',
                'meta_title' => 'Best Steam Ironing Service in Manjeri | Wrinkle-Free Guarantee',
                'meta_description' => 'Get crisp, professional steam ironing in Manjeri. Protect your clothes from burns and shine. Fast pickup and delivery available. Call Smiley Dry Cleaning now.',
                'meta_keywords' => 'steam ironing manjeri, ironing service manjeri, clothes pressing manjeri, laundry service, dry cleaners near me'
            ],
            [
                'title' => 'Shoe Cleaning',
                'slug' => 'shoe-laundry-cleaning-manjeri',
                'description' => 'Premium care for your sneakers, leather shoes, and more.',
                'content' => '<p>Give your kicks a second life with the <strong>best shoe laundry in Manjeri</strong>. From white sneakers turning yellow to muddy trekking boots, we handle it all. Our shoe cleaning experts use specialized chemicals and soft brushes to deep clean without damaging the material.</p><h3>We Clean:</h3><ul><li>Sneakers & Sports Shoes</li><li>Formal Leather Shoes</li><li>Suede & Nubuck Footwear</li><li>Boots & Loafers</li></ul><p>We also offer sole whitening and odor elimination treatments.</p>',
                'icon' => 'shoe',
                'meta_title' => 'Premium Shoe Laundry & Cleaning in Manjeri | Sneaker Spa',
                'meta_description' => 'Professional shoe cleaning service in Manjeri. We clean sneakers, leather shoes, boots, and suede. Restore your footwear to brand new condition today.',
                'meta_keywords' => 'shoe cleaning manjeri, sneaker laundry manjeri, shoe washing service, shoe spa manjeri, best shoe cleaners'
            ],
            [
                'title' => 'Blanket Washing',
                'slug' => 'blanket-quilt-cleaning-manjeri',
                'description' => 'Deep cleaning for heavy blankets and comforters.',
                'content' => '<p>Sleeping on a clean bed is essential for health. Our <strong>heavy blanket and quilt cleaning service in Manjeri</strong> removes dust mites, allergens, and accumulated sweat. We use large-capacity commercial washers that standard home machines cannot match.</p><p>Perfect for comforters, duvets, mink blankets, and heavy quilts. Hygienically washed and perfectly dried.</p>',
                'icon' => 'blanket',
                'meta_title' => 'Hygienic Blanket & Quilt Cleaning in Manjeri | Smiley Dry Cleaning',
                'meta_description' => 'Deep cleaning for blankets, quilts, and comforters in Manjeri. Remove allergens and dust mites with our specialized heavy laundry service.',
                'meta_keywords' => 'blanket cleaning manjeri, quilt washing, comforter dry cleaning, heavy laundry service manjeri'
            ],
            [
                'title' => 'Bag & Toys Cleaning',
                'slug' => 'bag-soft-toy-cleaning-manjeri',
                'description' => 'Safe and effective cleaning for bags and stuffed toys.',
                'content' => '<p>Don\'t let dirt ruin your favorite travel bags or your child\'s teddy bear. We offer specialized <strong>cleaning for school bags, luggage, and soft toys in Manjeri</strong>. We use skin-safe, non-toxic detergents to ensure that toys are safe for children to play with after cleaning.</p>',
                'icon' => 'bag',
                'meta_title' => 'Bag & Soft Toy Cleaning Service in Manjeri',
                'meta_description' => 'Expert cleaning for travel bags, school bags, and soft toys in Manjeri. Safe, non-toxic, and hygienic cleaning process.',
                'meta_keywords' => 'bag cleaning manjeri, trolley bag repair cleaning, soft toy washing, teddy bear cleaning manjeri'
            ],
            [
                'title' => 'Curtain Cleaning',
                'slug' => 'curtain-dry-cleaning-manjeri',
                'description' => 'Dust and stain removal to refresh your home interiors.',
                'content' => '<p>Revitalize your home with our <strong>curtain dry cleaning service in Manjeri</strong>. Curtains act as air filters, trapping dust and odors. Our process removes these contaminants while preserving the color and texture of the fabric. We handle removal and re-installation upon request.</p>',
                'icon' => 'curtain',
                'meta_title' => 'Curtain Dry Cleaning Service in Manjeri | Home Interior Cleaning',
                'meta_description' => 'Professional curtain dry cleaning in Manjeri. Remove dust, stains, and odors from your drapes. Pickup and delivery available.',
                'meta_keywords' => 'curtain cleaning manjeri, drapery cleaning, window blind cleaning, dry cleaners for curtains'
            ],
            [
                'title' => 'Carpet Cleaning',
                'slug' => 'carpet-rug-cleaning-manjeri',
                'description' => 'Deep extraction cleaning for carpets and rugs.',
                'content' => '<p>Restore the vibrant colors of your floor with our <strong>carpet and rug cleaning service in Manjeri</strong>. We use deep extraction technology to pull out dirt, sand, and stains buried deep within the fibers. Ideal for Persian rugs, synthetic carpets, and office flooring.</p>',
                'icon' => 'carpet',
                'meta_title' => 'Professional Carpet Cleaning Manjeri | Deep Stain Removal',
                'meta_description' => 'Best carpet cleaning in Manjeri. We remove stubborn stains, dirt, and allergens from rugs and carpets. Book your slot today.',
                'meta_keywords' => 'carpet cleaning manjeri, rug washing, carpet shampooing, floor cleaning service'
            ],
            [
                'title' => 'Suits & Blazers',
                'slug' => 'suit-blazer-dry-cleaning-manjeri',
                'description' => 'Professional dry cleaning to maintain fabric quality and fit.',
                'content' => '<p>Your power suit deserves professional care. Our <strong>suit and blazer dry cleaning in Manjeri</strong> focuses on maintaining the structure, lining, and fabric sheen. We treat collars and cuffs specially to remove sweat marks without damaging the delicate wool or blend fabrics.</p>',
                'icon' => 'suit',
                'meta_title' => 'Premium Suit & Blazer Dry Cleaning Manjeri',
                'meta_description' => 'Expert care for suits, blazers, and coats. Maintain the perfect fit and fabric quality with Smiley Dry Cleaning Manjeri.',
                'meta_keywords' => 'suit dry cleaning manjeri, blazer cleaning, coat dry clean, formal wear cleaning'
            ],
            [
                'title' => 'Costumes & Sarees',
                'slug' => 'saree-wedding-dress-dry-cleaning-manjeri',
                'description' => 'Delicate care for expensive and intricate fabrics.',
                'content' => '<p>We specialize in <strong>bridal saree and wedding dress dry cleaning in Manjeri</strong>. Whether it\'s heavy Kanchipuram silk, designer lehengas, or stone-work gowns, our gentle cleaning process preserves the embroidery and fabric luster. Trusted by hundreds of brides for post-wedding preservation.</p>',
                'icon' => 'saree',
                'meta_title' => 'Bridal Saree & Wedding Dress Dry Cleaning Manjeri',
                'meta_description' => 'Trust your expensive wedding sarees and designer dresses with us. Specialized silk saree dry cleaning in Manjeri.',
                'meta_keywords' => 'saree polishing manjeri, silk saree dry cleaning, wedding dress cleaning, designer wear laundry'
            ],
            [
                'title' => 'Stain Removing',
                'slug' => 'stain-removal-service-manjeri',
                'description' => 'Expert stain removal techniques for stubborn marks.',
                'content' => '<p>Got a tough stain? Don\'t risk setting it further. Bring it to the <strong>stain removal experts in Manjeri</strong>. We treat ink, oil, grease, coffee, and wine stains using targeted chemical agents that are tough on stains but gentle on clothes.</p>',
                'icon' => 'stain',
                'meta_title' => 'Expert Stain Removal Service Manjeri | Ink, Oil, Wine Stains',
                'meta_description' => 'Professional stain removal service. We remove tough stains like ink, oil, and coffee from all types of fabrics. 99% Success rate.',
                'meta_keywords' => 'stain removal manjeri, laundry stain remover, clothes spot cleaning'
            ],
        ];

        DB::table('services')->insert($services);
    }
}
