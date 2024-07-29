<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class ProjectService
 *
 * @package App\Services
 */
class ProjectService
{
    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return Project::paginate(10);
    }

    /**
     * @param array $data
     * @return Project
     */
    public function createProject(array $data): Project
    {
        return Project::create($data);
    }

    /**
     * @param $id
     * @return Project
     */
    public function getProjectById($id): Project
    {
        return Project::findOrFail($id);
    }

    /**
     * @param Project $project
     * @param array $data
     * @return Project
     */
    public function updateProject(Project $project, array $data): Project
    {
        $project->update($data);
        return $project;
    }

    /**
     * @param Project $project
     * @return void
     */
    public function deleteProject(Project $project): void
    {
        $project->delete();
    }
}
