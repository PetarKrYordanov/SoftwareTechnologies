namespace IMDB.Controllers
{
    using Microsoft.AspNetCore.Mvc;
    using System.Collections.Generic;
    using System.Linq;
    using Models;

    public class FilmController : Controller
    {
        private readonly IMDBDbContext context;

        public FilmController(IMDBDbContext context)
        {
            this.context = context;
        }

        [HttpGet]
        [Route("")]
        public IActionResult Index()
        {
            var films = context.Films.ToList();
            return View(films);
        }

        [HttpGet]
        [Route("/create")]
        public IActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("/create")]
        public IActionResult Create(Film film)
        {
            context.Films.Add(film);
            context.SaveChanges();

            return RedirectToAction("Index");
        }

        [HttpGet]
        [Route("/edit/{id}")]
        public IActionResult Edit(int? id)
        {
            Film film = context
                .Films
                .Where(p => p.Id == id)
                .FirstOrDefault();

            return View(film);
        }

        [HttpPost]
        [Route("/edit/{id}")]
        public IActionResult EditAction(int id, Film film)
        {
            context.Films.Update(film);
            context.SaveChanges();

            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("/delete/{id}")]
        public IActionResult Delete(int? id)
        {

            Film film = context
                .Films
                .Where(p => p.Id == id)
                .FirstOrDefault();

            return View(film);
        }

        [HttpPost]
        [Route("/delete/{id}")]
        public IActionResult Delete( Film film)
        {
            context.Remove(film);
            context.SaveChanges();

            return RedirectToAction(nameof(Index));
        }
    }
}
